import java.util.List;

public class PaginationHelper<I> {
    List<I> collection;
    int itemsPerPage;

  public PaginationHelper(List<I> collection, int itemsPerPage) {
    this.collection = collection;
    this.itemsPerPage = itemsPerPage;
  }
  
  public int itemCount() {
    return collection.size();
  }
  
  public int pageCount() {
    int division = (int)(collection.size() / itemsPerPage);
    int resto = collection.size() % itemsPerPage;
    return resto == 0 ? division : division + 1;
  }
  
  public int pageItemCount(int pageIndex) {
    int comienzoPagIndex = itemsPerPage * pageIndex;
    int finalPageIndex = comienzoPagIndex + itemsPerPage;

    if (comienzoPagIndex >= collection.size() || comienzoPagIndex < 0) {
        return -1;
    }else if (finalPageIndex >= collection.size()) {
        return collection.size() - comienzoPagIndex;
    } else {
        return itemsPerPage;
    }
  }
  
  public int pageIndex(int itemIndex) {
    return itemIndex >= collection.size() || itemIndex < 0 ? -1 : (int)(itemIndex / itemsPerPage);
  }
}
