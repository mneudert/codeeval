set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

proc tcl::mathfunc::fib {n} {
    expr {$n < 2 ? $n : fib($n - 1) + fib($n - 2)}
}

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    puts [expr fib($line)]
}

close $file
