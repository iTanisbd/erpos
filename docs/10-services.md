# ERPOS Documentation

Document: Services

Version: 1.0

Status: Draft

Last Updated: 2026-08-07

Author: Md. Anisur Rahman

---

# Purpose

Services define the actual work performed by technicians.

A Service is different from a Repair Problem.

Example:

Problem:
- Display Issue

Possible Services:
- Display Replacement
- Display Connector Repair
- Display IC Repair

---

# Examples

- Display Replacement
- Battery Replacement
- Charging Port Replacement
- Firmware Flash
- FRP Unlock
- Data Recovery
- Water Damage Cleaning

---

# Business Rules

- One Repair Problem may have multiple Services.
- Services may require spare parts.
- Services may have default labor cost.
- Services may have estimated completion time.
- Services may include warranty.
- Services can be enabled or disabled.
- New Services can be added anytime without developer support.

---

# Future Features

- Skill Level
- Estimated Duration
- Warranty Days
- Labor Cost
- Tax Class
- Icon
- Color
- Service Category
