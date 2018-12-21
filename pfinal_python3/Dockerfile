FROM python:3.7.1-stretch
MAINTAINER pfinal <lampxiezi@163.com>
RUN apt-get update
RUN mkdir -p /usr/local/src/python3
COPY requirements.txt /usr/local/src/python3
RUN pip install -r /usr/local/src/python3/requirements.txt -i https://pypi.douban.com/simple
ENV PATH /usr/local/bin/python3:$PATH
CMD ["bash"]
