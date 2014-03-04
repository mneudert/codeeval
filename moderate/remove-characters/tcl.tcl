set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set parts [split $line ","]
    set clean [lindex $parts 0]

    foreach char [split [string trim [lindex $parts 1]] {}] {
        set clean [string map [list $char {}] $clean]
    }

    puts $clean
}

close $file
