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

		number, _ := strconv.Atoi(numbers[0])
		left, _ := strconv.Atoi(numbers[1])
		right, _ := strconv.Atoi(numbers[2])

		numberBits := strconv.FormatInt(int64(number), 2)
		leftBit := numberBits[len(numberBits)-left : len(numberBits)-left+1]
		rightBit := numberBits[len(numberBits)-right : len(numberBits)-right+1]

		if leftBit == rightBit {
			fmt.Println("true")
		} else {
			fmt.Println("false")
		}

		line, _, rErr = reader.ReadLine()
	}
}
