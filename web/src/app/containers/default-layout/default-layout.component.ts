import { Component, OnDestroy, Inject, OnInit } from "@angular/core";
import { DOCUMENT } from "@angular/common";
import { navItems } from "../../_nav";
import { AuthService } from "../../auth/auth.service";
import { Router } from '@angular/router';
import { BreadcrumbMenuService } from '../../shared/services/breadcrumb-menu-service.service';
import { Subscription } from 'rxjs';
import { ToasterConfig, ToasterService } from 'angular2-toaster';


@Component({
  selector: "app-dashboard",
  templateUrl: "./default-layout.component.html",
})
export class DefaultLayoutComponent implements OnInit, OnDestroy {
  public navItems = navItems;
  public sidebarMinimized = true;
  private changes: MutationObserver;
  public element: HTMLElement;
  public settingsMenu = [];

  footerDate: string;

  private subscriptionBreadcrumbMenuService: Subscription;

  activityBoxVisibility: boolean = false;
  user: any;
  userAvatar: string = "";

  url: string = "";

  constructor(
    private readonly authService: AuthService,
    private router: Router,
    private breadcrumbMenuService: BreadcrumbMenuService,
    private toasterService: ToasterService,
    @Inject(DOCUMENT) _document?: any
  ) {
    this.changes = new MutationObserver(mutations => {
      this.sidebarMinimized = _document.body.classList.contains(
        "sidebar-minimized"
      );
    });
    this.element = _document.body;
    this.changes.observe(<Element>this.element, {
      attributes: true,
      attributeFilter: ["class"]
    });
  }

  ngOnInit() {


    this.footerDate = (new Date()).getFullYear().toString();

    if (this.authService.getUser().role === 'admin') {
      this.activityBoxVisibility = true;
    }

    this.authService.getUserAvatar()
      .subscribe((avatar => {
        this.userAvatar = avatar;
      }));


    this.user = this.authService.getUser();

    let role = this.authService.getRole();

    let hMenu = this.router.url.split('/')[1];

    this.url = this.router.url.split('/')[1];

    this.subscriptionBreadcrumbMenuService = this.breadcrumbMenuService.settingsItems
      .subscribe(
        (items: any) => {
          this.settingsMenu = items;
        }
      );


    switch (role) {
      case "admin":

        switch (hMenu) {
          case "admin":
            this.navItems = [
              {
                name: 'Users',
                url: '/admin/users',
                icon: 'fa fa-users',
                // badge: {
                //   variant: 'info',
                //   text: 'NEW'
                // }
              },
            ];
            break;
          case "flight-evidence":

            this.navItems = [{
              name: 'Dashboard',
              url: '/flight-evidence/dashboard',
              icon: 'cui-dashboard icons',
            }, {
              name: 'Log Book',
              url: '/flight-evidence/log-book/datatable',
              icon: 'fa fa-book',
            }, {
              name: 'Reports',
              url: '/flight-evidence/reports',
              icon: 'fa fa-bar-chart',
              children: [{
                name: 'Aircraft Statistics',
                url: '/flight-evidence/reports/aircraft-statistics',
                icon: 'xfa xfa-book',
              }, {
                name: 'Reports 2',
                url: '/flight-evidence/reports/reports-2',
                icon: 'xfa xfa-book',
              },]
            }];

            break;
          case "inventory":

            this.navItems = [{
              name: 'Dashboard',
              url: '/inventory/dashboard',
              icon: 'cui-dashboard icons',
            },
            {
              name: 'Stock',
              url: '/inventory/stock',
              icon: 'fa fa-bar-chart',
              children: [{
                name: 'Aircraft Parts',
                url: '/inventory/stock/aircraft-parts',
                icon: 'icon-settings',
              }]
            },
            {
              name: 'CAMO',
              url: '/inventory/c-a-m-o',
              icon: 'fa fa-bar-chart',
              children: [{
                name: 'Aircraft Parts',
                url: '/inventory/c-a-m-o/aircraft-parts',
                icon: 'icon-settings',
              }]
            },
            {
              name: 'Reports',
              url: '/inventory/reports',
              icon: 'fa fa-bar-chart',
              children: [{
                name: 'Aircraft Statistics',
                url: '/inventory/reports/aircraft-statistics',
                icon: 'xfa xfa-book',
              }, {
                name: 'Reports 2',
                url: '/inventory/reports/reports-2',
                icon: 'xfa xfa-book',
              },]
            }];

            break;
          default:
            this.navItems = [];
        }

        break;
      case "engineer":
        this.navItems = [
          {
            name: 'Dashboard',
            url: '/dashboard',
            icon: 'cui-dashboard icons',
            // badge: {
            //   variant: 'info',
            //   text: 'NEW'
            // }
          },
          {
            name: 'Test',
            url: '/test',
            icon: 'icon-speedometer',
            // badge: {
            //   variant: 'info',
            //   text: 'NEW'
            // }
          },
        ];
        break;
      default:
        this.navItems = [];
    }
  }

  signOut() {
    this.authService.signOut();
  }

  ngOnDestroy(): void {
    this.subscriptionBreadcrumbMenuService.unsubscribe();
    this.changes.disconnect();
  }
}
