set file [open [lindex $argv 0] r]
set calcs [split [read $file] "\n"]

foreach calc $calcs {
    if {0 == [string length $calc]} {
        continue
    }

    set numbers [split $calc ","]
    set n [lindex $numbers 0]
    set m [lindex $numbers 1]

    while {$n >= $m} {
        set n [expr $n - $m]
    }

    puts $n
}

close $file
