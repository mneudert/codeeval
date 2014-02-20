set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set numbers [split $line ","]
    set uniques {}

    foreach number $numbers {
        if {$number != [lindex $uniques end]} {
            lappend uniques $number
        }
    }

    puts [join $uniques ","]
}

close $file
