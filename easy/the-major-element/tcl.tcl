set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set numbers [split $line ","]
    set major "None"
    set threshold [expr [llength $numbers] / 2]
    set counts [dict create]

    foreach number $numbers {
        set count 1

        if {[dict exists $counts $number]} {
            set count [expr [dict get $counts $number] + 1]
        }

        dict set counts $number $count
    }

    foreach number [dict keys $counts] {
        if {[dict get $counts $number] >= $threshold} {
            set major $number
            break
        }
    }

    puts $major
}

close $file
