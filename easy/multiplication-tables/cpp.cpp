#include <stdio.h>

int main() {
  for (int x = 1; x <= 12; ++x) {
    fprintf(stdout, "%d", x);

    for (int y = 1; y <= 12; ++y) {
      fprintf(stdout, "%4d", x * y);
    }

    puts("");
  }

  return 0;
}
