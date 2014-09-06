set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set numbers [split $line ","]
    set base [lindex $numbers 0]
    set comp [lindex $numbers 1]
    set mult [lindex $numbers 1]

    while {$base > $comp} {
        set comp [expr $comp + $mult]
    }

    puts $comp
}

close $file
