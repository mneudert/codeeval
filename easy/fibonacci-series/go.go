package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

var fibs = map[int]int{
	0: 0,
	1: 1,
}

func fibonacci(fib int) int {
	if _, exists := fibs[fib]; exists {
		return fibs[fib]
	}

	return fibonacci(fib-1) + fibonacci(fib-2)
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		fib, _ := strconv.Atoi(string(line))

		fmt.Println(fibonacci(fib))

		line, _, rErr = reader.ReadLine()
	}
}
