set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set inter [list]
    set sets [split $line ";"]
    set lhs [split [lindex $sets 0] ","]
    set rhs [split [lindex $sets 1] ","]

    foreach l $lhs {
        if {$l in $rhs} {
            lappend inter $l
        }
    }

    puts [join $inter ","]
}

close $file
