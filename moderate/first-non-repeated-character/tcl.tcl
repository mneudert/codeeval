set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set chars [split $line {}]

    foreach char $chars {
        if {1 == [llength [lsearch -all $chars $char]]} {
            puts $char
            break
        }
    }
}

close $file
