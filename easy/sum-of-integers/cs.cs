using System;
using System.IO;

class Program
{
    static void Main(string[] args)
    {
        Int32 sum = 0;

        using (StreamReader reader = File.OpenText(args[0]))

        while (!reader.EndOfStream)
        {
            string number = reader.ReadLine();

            if (null == number)
            {
                continue;
            }

            sum += Int32.Parse(number);
        }

        Console.WriteLine(sum);
    }
}
