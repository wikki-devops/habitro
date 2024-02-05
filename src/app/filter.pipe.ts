import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'filter'
})
export class FilterPipe implements PipeTransform {
  transform(items: any[], filter: string, filterType: string): any[] {
    if (!items || !filter || !filterType) {
      return items;
    }

    // Perform filtering based on different filter types
    switch (filterType) {
      case 'data_filter':
        return items.filter(item => item.data_filter === filter);
      case 'package':
        return items.filter(item => item.package === filter);
      default:
        return items;
    }
  }
}
