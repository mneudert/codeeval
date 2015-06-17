package main

import (
	"bufio"
	"fmt"
	"math"
	"os"
	"sort"
	"strings"
)

func calculateBeauty(line string) {
	counts := make([]int, 26)
	beauty := 0

	for _, ord := range line {
		if (97 > ord) || (122 < ord) {
			continue
		}

		counts[(ord - 97)] += 1
	}

	sort.Sort(sort.Reverse(sort.IntSlice(counts)))

	for n := 26; n > 0; n-- {
		beauty += n * counts[int(math.Abs(float64(n-26)))]
	}

	fmt.Println(beauty)
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		calculateBeauty(strings.ToLower(string(line)))

		line, _, rErr = reader.ReadLine()
	}
}
