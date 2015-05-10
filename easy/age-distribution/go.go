package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func printAge(age int) {
	if age < 0 || age > 100 {
		fmt.Println("This program is for humans")
		return
	}

	if age <= 2 {
		fmt.Println("Still in Mama's arms")
	} else if age <= 4 {
		fmt.Println("Preschool Maniac")
	} else if age <= 11 {
		fmt.Println("Elementary school")
	} else if age <= 14 {
		fmt.Println("Middle school")
	} else if age <= 18 {
		fmt.Println("High school")
	} else if age <= 22 {
		fmt.Println("College")
	} else if age <= 65 {
		fmt.Println("Working for the man")
	} else {
		fmt.Println("The Golden Years")
	}
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		age, _ := strconv.Atoi(string(line))

		printAge(age)

		line, _, rErr = reader.ReadLine()
	}
}
