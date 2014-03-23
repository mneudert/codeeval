package main

import (
	"bufio"
	"fmt"
	"math"
	"os"
	"strconv"
	"strings"
)

func distance(line string) {
	parts := strings.Split(line, " ")

	x_1, _ := strconv.ParseInt(parts[0][1:len(parts[0])-1], 10, 0)
	x_2, _ := strconv.ParseInt(parts[2][1:len(parts[2])-1], 10, 0)
	y_1, _ := strconv.ParseInt(parts[1][0:len(parts[1])-1], 10, 0)
	y_2, _ := strconv.ParseInt(parts[3][0:len(parts[3])-1], 10, 0)

	x := 0
	y := 0

	if x_1 > x_2 {
		x = int(x_1 - x_2)
	} else {
		x = int(x_2 - x_1)
	}

	if y_1 > y_2 {
		y = int(y_1 - y_2)
	} else {
		y = int(y_2 - y_1)
	}

	fmt.Println(math.Sqrt(float64(x*x) + float64(y*y)))
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		distance(string(line))

		line, _, rErr = reader.ReadLine()
	}
}
