package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	number, _, rErr := reader.ReadLine()

	sum := 0

	for rErr == nil {
		val, _ := strconv.Atoi(string(number))
		sum += val

		number, _, rErr = reader.ReadLine()
	}

	fmt.Println(sum)
}
