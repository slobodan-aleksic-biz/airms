import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class BreadcrumbMenuService {
  public settingsItems = new BehaviorSubject<Array<any>>([]);
  constructor() { }
}
