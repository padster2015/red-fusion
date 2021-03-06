# Configuration

That is full config of garden.
Now it looks like cheat sheet for `config.json`
You can override some sections of this with your needs in **[your project]/config.json**

```json
{

    "host": "localhost",

    "logger": {
        "path": "logs/garden.log",
        "level": "info"
    },

    "webdriver": {

        "server_host": "localhost",
        "server_port": 4444,

        "proxy_port": 8888,
        "proxy_host": "localhost",

        "proxy_remap_hosts": {
            "localhost":"127.0.0.1"
        },

        "keep_alive": true,

        "browser": "phantomjs",
        "profile_name": "default",

        "screen_resolution":"1280x1024",
        "waitTimeout": 7000,

        "profile": {
            "default": {},
            "remote": {
                "browser": "chrome",
                "server_host": "192.168.80.1",
                "proxy_host": "192.168.80.101"
            }
        },
        "capabilities": {
            "phantomjs": {
                "browserName": "phantomjs",
                "phantomjs.cli.args": ["--ignore-ssl-errors=yes"]
            },
            "chrome": {
                "browserName": "chrome",
                "acceptSslCerts": true,
                "chromeOptions": {
                    "args": ["--test-type"]
                }
            },
            "firefox": {
                "browserName": "firefox"
            }
        }
    },

    "load": {
        "config": {
            "host": "http://localhost:3010"
        },
        "tests": {
            "transactions": {
                "endpoint": "/posts",
                "concurrency": 10,
                "requests": 1000,
                "duration": 20000
            }
        }
    }
}
```