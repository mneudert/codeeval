package main

import (
	"bufio"
	"fmt"
	"os"
	"sort"
	"strconv"
	"strings"
)

func swapElements(line string) {
	taskParts := strings.Split(line, ":")
	numbers := sort.StringSlice(strings.Split(taskParts[0], " "))
	swaps := strings.Split(taskParts[1], ",")

	for _, swap := range swaps {
		elements := strings.Split(strings.TrimSpace(swap), "-")
		left, _ := strconv.Atoi(elements[0])
		right, _ := strconv.Atoi(elements[1])

		numbers.Swap(left, right)
	}

	fmt.Println(strings.Join(numbers, " "))
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		swapElements(string(line))

		line, _, rErr = reader.ReadLine()
	}
}
