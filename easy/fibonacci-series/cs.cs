using System;
using System.IO;
using System.Collections.Generic;

class Program
{
    private static Dictionary<int, int> _fibCache = new Dictionary<int, int>()
    {
        {0, 0},
        {1, 1}
    };

    static void Main(string[] args)
    {
        using (StreamReader reader = File.OpenText(args[0]))

        while (!reader.EndOfStream)
        {
            string fibOf = reader.ReadLine();

            if (null == fibOf)
            {
                continue;
            }

            Console.WriteLine(_fibonacci(Int32.Parse(fibOf)));
        }
    }

    private static int _fibonacci(int fibOf)
    {
        if (!_fibCache.ContainsKey(fibOf))
        {
            _fibCache[fibOf] = _fibonacci(fibOf - 1) + _fibonacci(fibOf - 2);
        }

        return _fibCache[fibOf];
    }
}
