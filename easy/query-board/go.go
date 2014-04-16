package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func main() {
	board := make([][]int, 256)

	for x := 0; x < 256; x++ {
		board[x] = make([]int, 256)

		for y := 0; y < 256; y++ {
			board[x][y] = 0
		}
	}

	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		query := strings.Split(string(line), " ")

		switch query[0] {
		case "SetCol":
			col, _ := strconv.Atoi(query[1])
			val, _ := strconv.Atoi(query[2])

			for row := 0; row < 256; row++ {
				board[col][row] = val
			}

		case "SetRow":
			row, _ := strconv.Atoi(query[1])
			val, _ := strconv.Atoi(query[2])

			for col := 0; col < 256; col++ {
				board[col][row] = val
			}

		case "QueryCol":
			col, _ := strconv.Atoi(query[1])
			sum := 0

			for row := 0; row < 256; row++ {
				sum += board[col][row]
			}

			fmt.Println(sum)

		case "QueryRow":
			row, _ := strconv.Atoi(query[1])
			sum := 0

			for col := 0; col < 256; col++ {
				sum += board[col][row]
			}

			fmt.Println(sum)
		}

		line, _, rErr = reader.ReadLine()
	}
}
