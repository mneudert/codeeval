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
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		number, _ := strconv.Atoi(string(line))

		fmt.Println(strconv.FormatInt(int64(number), 2))

		line, _, rErr = reader.ReadLine()
	}
}
