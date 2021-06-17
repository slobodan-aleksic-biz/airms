import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class LogService {
  public logs = new BehaviorSubject<Array<any>>([]);
  constructor() { }
}
