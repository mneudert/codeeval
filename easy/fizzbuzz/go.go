package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func fizzBuzz(line string) {
	def := strings.Split(line, " ")
	if 3 != len(def) {
		fmt.Printf("Error parsing definition: %v\n", def)
		os.Exit(1)
	}

	fizz, _ := strconv.Atoi(def[0])
	buzz, _ := strconv.Atoi(def[1])
	max, _ := strconv.Atoi(def[2])

	for i := 1; i <= max; i++ {
		if i%fizz == 0 && i%buzz == 0 {
			fmt.Print("FB")
		} else if i%buzz == 0 {
			fmt.Print("B")
		} else if i%fizz == 0 {
			fmt.Print("F")
		} else {
			fmt.Print(i)
		}

		if i < max {
			fmt.Printf(" ")
		}
	}

	fmt.Println()
}

func main() {
	if 2 != len(os.Args) {
		fmt.Println("Input file missing!")
		os.Exit(1)
	}

	file, oErr := os.Open(os.Args[1])
	if oErr != nil {
		fmt.Printf("Error opening file: %v\n", oErr)
		os.Exit(1)
	}

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		fizzBuzz(string(line))

		line, _, rErr = reader.ReadLine()
	}
}
