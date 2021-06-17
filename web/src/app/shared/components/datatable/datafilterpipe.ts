import * as _ from 'lodash';
import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'dataFilter'
})
export class DataFilterPipe implements PipeTransform {

  transform(array: any[], query: string): any {

    if (query) {

      let strArr = query.toUpperCase().split(' ');

      return _.filter(array, row => {
        let t = false;

        for(let col of (Object.keys(row))) {
          let val = row[col];
          if (typeof val === 'string' || val instanceof String) {
            for(let str of strArr) {
              if (str.length > 0 && val.toUpperCase().indexOf(str) > -1) {
                t = true;
                break;
              }
            }
          }
        }

        return t;
      });

    }

    return array;
  }
}

