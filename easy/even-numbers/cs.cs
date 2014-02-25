using System;
using System.IO;

class Program
{
    static void Main(string[] args)
    {
        using (StreamReader reader = File.OpenText(args[0]))

        while (!reader.EndOfStream)
        {
            string number = reader.ReadLine();

            if (null == number)
            {
                continue;
            }

            Console.WriteLine(
                (1 + UInt16.Parse(number.Substring(number.Length - 1))) % 2
            );
        }
    }
}
