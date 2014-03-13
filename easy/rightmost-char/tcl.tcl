set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set fields [split $line ","]
    set stack [lindex $fields 0]
    set pos -1

    for {set i 1} {$i < [string length $stack]} {incr i} {
        if {[string index $stack $i] == [lindex $fields 1]} {
            set pos $i
        }
    }

    puts $pos
}

close $file
