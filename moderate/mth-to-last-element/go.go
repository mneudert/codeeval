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
		elements := strings.Split(string(line), " ")
		mth, _ := strconv.Atoi(elements[len(elements)-1])
		target := len(elements) - mth - 1

		if -1 < target {
			fmt.Println(elements[target])
		} else {
			fmt.Println("")
		}

		line, _, rErr = reader.ReadLine()
	}
}
