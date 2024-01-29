import java.util.LinkedList;
import java.util.List;

public class RemovedNumbers {

	public static List<long[]> removNb(long n) {
		List<long[]> paresBorrables = new LinkedList<>();
		long suma = n * (n + 1) / 2;

		for (long i = 1; i <= n; i++) {
			long j = (suma - i) / (i + 1);
			if (j <= n && i * j == suma - i - j) {
				paresBorrables.add(new long[] { i, j });
			}
		}

		return paresBorrables;
	}
}