package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		numbers := strings.Split(string(line), ",")

		n, _ := strconv.Atoi(numbers[0])
		m, _ := strconv.Atoi(numbers[1])

		for n >= m {
			n -= m
		}

		fmt.Println(n)
		line, _, rErr = reader.ReadLine()
	}
}
