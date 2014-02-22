set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set parts [split $line ":"]
    set numbers [split [string trim [lindex $parts 0]] " "]
    set swaps [split [string trim [lindex $parts 1]] ","]

    foreach swap $swaps {
        set elems [split [string trim $swap] "-"]
        set temp [lindex $numbers [lindex $elems 0]]

        lset numbers [lindex $elems 0] [lindex $numbers [lindex $elems 1]]
        lset numbers [lindex $elems 1] $temp
    }

    puts [join $numbers " "]
}

close $file
