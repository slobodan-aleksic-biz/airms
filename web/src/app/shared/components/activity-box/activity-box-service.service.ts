import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ActivityBoxService {
  public data = new BehaviorSubject<Array<any>>([]);
  public url = new BehaviorSubject<string>(null);
  constructor() { }
}
