FROM prestashop/prestashop:latest

# Expose port 443
RUN echo "Exposing port 443..."
EXPOSE 443

# Install Git
RUN echo "Updating apt-get and installing Git..."
RUN apt-get update && apt-get install -y git

RUN echo "Copying all to all"
COPY ["html/.", "."] 
