for {set x 1} {$x <= 12} {incr x} {
    for {set y 1} {$y <= 12} {incr y} {
        if {1 == $y} {
            puts -nonewline [expr $x * $y]
        } else {
            puts -nonewline [format "%3s" [expr $x * $y]]
        }

        if {12 > $y} {
            puts -nonewline " "
        } else {
            puts ""
        }
    }
}
