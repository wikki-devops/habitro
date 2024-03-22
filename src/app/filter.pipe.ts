// filter.pipe.ts
import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'filter'
})
export class FilterPipe implements PipeTransform {
  transform(items: any[], filters: { property: string; value: string }[]): any[] {
    if (!items || !filters || filters.length === 0) {
      return items;
    }

    return items.filter(item => filters.every(filter => item[filter.property] === filter.value));
  }
}
