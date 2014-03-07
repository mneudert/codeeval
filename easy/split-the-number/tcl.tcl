set file [open [lindex $argv 0] r]
set numpats [split [read $file] "\n"]

foreach numpat $numpats {
    if {0 == [string length $numpat]} {
        continue
    }

    set parts [split $numpat " "]
    set number [split [lindex $parts 0] {}]
    set pattern [split [lindex $parts 1] {}]

    set lhs ""
    set rhs ""
    set pos 0
    set op ""

    foreach char $pattern {
        if {"+" == $char || "-" == $char} {
            set op $char
            continue
        }

        if {"" == $op} {
            append lhs [lindex $number $pos]
        } else {
            append rhs [lindex $number $pos]
        }

        incr pos
    }

    if {"+" == $op} {
        puts [expr $lhs + $rhs]
    } else {
        puts [expr $lhs - $rhs]
    }
}

close $file
