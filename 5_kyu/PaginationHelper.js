class PaginationHelper {
    collection;
    itemsPerPage;

    constructor(collection, itemsPerPage) {
        this.collection = collection;
        this.itemsPerPage = itemsPerPage;
    }

    itemCount() {
        return this.collection.length;
    }

    pageCount() {
        let division = Math.floor(this.collection.length / this.itemsPerPage);
        let resto = this.collection.length % this.itemsPerPage;
        
        return resto === 0 ? division : division + 1;
    }

    pageItemCount(pageIndex) {
        let comienzoPagIndex =  this.itemsPerPage * pageIndex;
        let finalPagIndex = comienzoPagIndex + this.itemsPerPage;

        if (comienzoPagIndex >= this.collection.length || comienzoPagIndex < 0) {
            return -1;
        }else if (finalPagIndex >= this.collection.length) {
            return this.collection.length - comienzoPagIndex;
        } else {
            return this.itemsPerPage;
        }
    }

    pageIndex(itemIndex) {
        return itemIndex >= this.collection.length || itemIndex < 0 ? -1 : Math.floor(itemIndex / this.itemsPerPage);

    }
}
