set file [open [lindex $argv 0] r]
set numbers [split [read $file] "\n"]

foreach number $numbers {
    if {0 == [string length $number]} {
        continue
    }

    set sum 0

    foreach digit [split $number {}] {
        set sum [expr int($sum + $digit)]
    }

    puts $sum
}

close $file
