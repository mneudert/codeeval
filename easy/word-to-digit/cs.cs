using System;
using System.IO;
using System.Linq;
using System.Collections.Generic;

class Program
{
    private static Dictionary<string, string> _digitMap = new Dictionary<string, string>()
    {
        {"zero",  "0"},
        {"one",   "1"},
        {"two",   "2"},
        {"three", "3"},
        {"four",  "4"},
        {"five",  "5"},
        {"six",   "6"},
        {"seven", "7"},
        {"eight", "8"},
        {"nine",  "9"}
    };

    static void Main(string[] args)
    {
        using (StreamReader reader = File.OpenText(args[0]))

        while (!reader.EndOfStream)
        {
            string digits = reader.ReadLine();

            if (null == digits)
            {
                continue;
            }

            Console.WriteLine(
                string.Join(
                    string.Empty,
                    digits.Split(';').Select( d => _digitMap[d.ToString()] )
                )
            );
        }
    }
}
