set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set lists [split $line "|"]
    set lhs [split [string trim [lindex $lists 0]] " "]
    set rhs [split [string trim [lindex $lists 1]] " "]
    set multiples {}

    for {set i 0} {$i < [llength $lhs]} {incr i} {
        lappend multiples [expr [lindex $lhs $i] * [lindex $rhs $i]]
    }

    puts [join $multiples " "]
}

close $file
