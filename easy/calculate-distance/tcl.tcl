set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set parts [split $line " "]
    set x_1 [string range [lindex $parts 0] 1 end-1]
    set x_2 [string range [lindex $parts 2] 1 end-1]
    set y_1 [string range [lindex $parts 1] 0 end-1]
    set y_2 [string range [lindex $parts 3] 0 end-1]

    if {$x_1 > $x_2} {
        set x [expr $x_1 - $x_2]
    } else {
        set x [expr $x_2 - $x_1]
    }

    if {$y_1 > $y_2} {
        set y [expr $y_1 - $y_2]
    } else {
        set y [expr $y_2 - $y_1]
    }

    puts [expr round(sqrt(($x * $x) + ($y * $y)))]
}

close $file
