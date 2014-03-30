open(INFILE, "$ARGV[0]") or die("Cannot open file $_[0] for reading: $!");

while(my $line = <INFILE>) {
    next if($line =~ m/^s$/);

    @words = split(/ +/, $line);
    print $words[-2] . "\n";
}

close(INFILE);
