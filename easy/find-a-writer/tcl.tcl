set file [open [lindex $argv 0] r]
set rows [split [read $file] "\n"]

foreach row $rows {
    if {0 == [string length $row]} {
        continue
    }

    set rowparts [split $row "|"]
    set writer [split [string trim [lindex $rowparts 0]] {}]
    set key [split [string trim [lindex $rowparts 1]] " "]

    foreach pos $key {
        puts -nonewline [lindex $writer [expr $pos - 1]]
    }

    puts ""
}

close $file
