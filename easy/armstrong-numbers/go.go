package main

import (
	"bufio"
	"fmt"
	"math"
	"os"
	"strconv"
)

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		digits := string(line)
		number, _ := strconv.Atoi(digits)
		count := float64(len(digits))
		sum := float64(0)

		for _, digit := range digits {
			sum += math.Pow(float64(digit)-48, count)
		}

		if float64(number) == sum {
			fmt.Println("True")
		} else {
			fmt.Println("False")
		}

		line, _, rErr = reader.ReadLine()
	}
}
