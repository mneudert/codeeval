package main

import (
	"fmt"
)

func main() {
	for x := 1; x <= 12; x++ {
		for y := 1; y <= 12; y++ {
			if 1 == y {
				fmt.Print(x)
			} else {
				fmt.Print(fmt.Sprintf("%3d", x*y))
			}

			if 12 > y {
				fmt.Print(" ")
			} else {
				fmt.Println("")
			}
		}
	}
}
