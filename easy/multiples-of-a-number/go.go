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

		base, _ := strconv.Atoi(numbers[0])
		comp, _ := strconv.Atoi(numbers[1])
		mult := comp

		for base > comp {
			comp += mult
		}

		fmt.Println(comp)
		line, _, rErr = reader.ReadLine()
	}
}
