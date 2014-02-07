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
	digits, _, rErr := reader.ReadLine()

	for rErr == nil {
		sum := 0

		for _, digit := range digits {
			val, _ := strconv.Atoi(string(digit))
			sum += val
		}

		fmt.Println(sum)
		digits, _, rErr = reader.ReadLine()
	}
}
