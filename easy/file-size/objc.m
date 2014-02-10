#import <stdio.h>
#import <sys/stat.h>

int main (int argc, char *argv[]) {
    struct stat st;

    stat(argv[1], &st);
    printf("%u\n", st.st_size);

    return 0;
}
