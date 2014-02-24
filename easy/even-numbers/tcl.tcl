set file [open [lindex $argv 0] r]
set numbers [split [read $file] "\n"]

foreach number $numbers {
    if {0 == [string length $number]} {
        continue
    }

    puts [expr int(($number + 1) % 2)]
}

close $file
