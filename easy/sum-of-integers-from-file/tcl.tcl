set file [open [lindex $argv 0] r]
set numbers [split [read $file] "\n"]
set val 0

foreach number $numbers {
    if {0 == [string length $number]} {
        continue
    }

    set val [expr int($val + $number)]
}

puts $val

close $file
