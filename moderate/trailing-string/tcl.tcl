set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set parts [split $line ","]
    set sentence [lindex $parts 0]
    set test [lindex $parts 1]
    set testlen [expr [string length $test] - 1]

    if {$test == [string range $sentence end-$testlen end]} {
        puts "1"
    } else {
        puts "0"
    }
}

close $file
